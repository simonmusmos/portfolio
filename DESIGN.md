---
name: Simon Musmos
description: A plain off-white page whose flat blocks and lines are scrubbed to the scroll position, assembling as you read and running backwards when you scroll up.
colors:
  ground: "#f5f5f3"
  ink: "#111111"
  gray: "#5f5f5b"
  line: "rgba(17, 17, 17, .12)"
  cobalt: "#2340ff"
  on-cobalt: "#ffffff"
typography:
  display:
    fontFamily: "Host Grotesk, system-ui, sans-serif"
    fontSize: "clamp(3rem, 1.6rem + 6vw, 6rem)"
    fontWeight: 600
    lineHeight: 0.95
    letterSpacing: "-0.035em"
  display-slide:
    fontFamily: "Host Grotesk, system-ui, sans-serif"
    fontSize: "clamp(2.6rem, 1rem + 5vw, 5.5rem)"
    fontWeight: 600
    lineHeight: 0.95
    letterSpacing: "-0.04em"
  headline-contact:
    fontFamily: "Host Grotesk, system-ui, sans-serif"
    fontSize: "clamp(2.2rem, 1.4rem + 3.4vw, 4.5rem)"
    fontWeight: 600
    lineHeight: 1
    letterSpacing: "-0.03em"
  headline:
    fontFamily: "Host Grotesk, system-ui, sans-serif"
    fontSize: "clamp(1.9rem, 1.4rem + 2vw, 3rem)"
    fontWeight: 600
    lineHeight: 1.05
    letterSpacing: "-0.02em"
  title-mail:
    fontFamily: "Host Grotesk, system-ui, sans-serif"
    fontSize: "clamp(1.4rem, 1rem + 2.6vw, 3rem)"
    fontWeight: 600
    letterSpacing: "-0.02em"
  tagline:
    fontFamily: "Host Grotesk, system-ui, sans-serif"
    fontSize: "clamp(1.25rem, 1rem + 1vw, 1.75rem)"
    fontWeight: 500
    letterSpacing: "-0.01em"
  title:
    fontFamily: "Host Grotesk, system-ui, sans-serif"
    fontSize: "1.3rem"
    fontWeight: 600
    letterSpacing: "-0.02em"
  body:
    fontFamily: "Host Grotesk, system-ui, sans-serif"
    fontSize: "clamp(1rem, .97rem + .15vw, 1.08rem)"
    fontWeight: 400
    lineHeight: 1.6
  label:
    fontFamily: "Host Grotesk, system-ui, sans-serif"
    fontSize: ".92rem"
    fontWeight: 500
rounded:
  marker: "3px"
  block: "4px"
  shot: "10px"
  grow: "12px"
spacing:
  gutter: "clamp(16px, 5vw, 64px)"
  measure: "1120px"
  header: "64px"
  section: "clamp(80px, 14vh, 140px)"
  gallery-row: "72px"
  gallery-col: "40px"
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ground}"
    typography: "{typography.label}"
    rounded: "{rounded.block}"
    padding: ".7rem 1.35rem"
    height: "46px"
  button-primary-hover:
    backgroundColor: "{colors.cobalt}"
    textColor: "{colors.on-cobalt}"
  header:
    backgroundColor: "{colors.ground}"
    textColor: "{colors.ink}"
    height: "{spacing.header}"
  chip-stack:
    textColor: "{colors.ink}"
    rounded: "{rounded.block}"
    padding: ".3rem .8rem"
  chip-stack-minor:
    textColor: "{colors.gray}"
    rounded: "{rounded.block}"
    padding: ".3rem .8rem"
  shot:
    backgroundColor: "{colors.on-cobalt}"
    rounded: "{rounded.shot}"
  timeline-marker:
    backgroundColor: "{colors.ground}"
    rounded: "{rounded.marker}"
    size: "12px"
  timeline-marker-on:
    backgroundColor: "{colors.cobalt}"
  contact-field:
    backgroundColor: "{colors.cobalt}"
    textColor: "{colors.on-cobalt}"
---

# Design System: Simon Musmos

## Overview

**Creative North Star: "The Scrubbed Build"**

A plain off-white page where the only graphics are flat square blocks and straight lines, and every one of them is tied to the scroll position. Nothing moves on its own: scroll down and the pieces assemble, scroll up and they come apart again. Blocks carry the idea of building things without decoration; the page itself stays simple, a single grotesk in ink and gray on a quiet ground.

Density is low and the reading order is linear: a large name with nine blocks, a full-bleed sliding heading over a two-up screenshot gallery, a ruled list, a narrow about column with a drawn timeline and a stack of chips, and a contact page that a cobalt block grows to fill. Cobalt is the single accent and it belongs to the moving graphics and the contact field; everything else is ink, gray and hairlines.

The system rejects ambient motion, 3D scenes, gradients, shadows, card containers and fade-up-on-every-section entrances. Every animation has a resting final state that is the whole design, which is what reduced-motion users and no-script visitors receive.

**Key Characteristics:**
- Flat off-white ground, ink type, one cobalt accent.
- Host Grotesk only, at 400, 500 and 600.
- Square blocks (4px radius) and 2px ink lines as the only graphic vocabulary.
- All motion scrubbed to scroll with GSAP ScrollTrigger, reversible, never autoplaying.
- No shadows, no gradients, no cards.

## Colors

A near-monochrome palette of warm off-white, ink and gray, broken only by one saturated cobalt.

### Primary
- **Build Cobalt** (#2340ff): two of the nine opening blocks, the filled timeline markers, the growing contact block and the full contact field behind it. Also the interaction color: button hover fill, link hover text, focus outline and text selection.

### Neutral
- **Off-White Ground** (#f5f5f3): the page, the sticky header and the hollow timeline markers.
- **Ink** (#111111): all headings and body copy, the primary button fill, seven of the nine blocks, the 2px drawn rules and the timeline line, primary stack chip borders.
- **Quiet Gray** (#5f5f5b): intro lede, project descriptions, list descriptions, nav links at rest, timeline years, minor stack chips, status text such as "Private client" or "Confidential".
- **Hairline** (rgba(17, 17, 17, .12)): header bottom border, list row rules, minor chip borders.
- **On-Cobalt White** (#ffffff): every piece of text on the contact field, and the matte behind screenshots while they load.

### Named Rules
**The One Accent Rule.** Cobalt is the only hue. It appears on graphics that move, on interaction feedback, and on the contact field. It never fills a static section background, a heading, or body text.

**The No-Ramp Rule.** There are no tints or shades of any token in use. If something needs to be quieter, it moves from ink to gray or to the hairline, not to a new lightness.

## Typography

**Display Font:** Host Grotesk (with system-ui, sans-serif)
**Body Font:** Host Grotesk (with system-ui, sans-serif)

**Character:** One grotesk for everything, made to work by weight and tracking alone: tight negative tracking on large semibold display, normal tracking on regular body.

### Hierarchy
- **Display** (600, clamp(3rem, 1.6rem + 6vw, 6rem), 0.95, -0.035em): the name in the opening only.
- **Display Slide** (600, clamp(2.6rem, 1rem + 5vw, 5.5rem), 0.95, -0.04em): the "Selected work" heading that slides across the viewport. Single line (`white-space: nowrap`), set on its own clipped full-bleed band rather than inside the measure; capped at 5.5rem so it stays under the name.
- **Headline Contact** (600, clamp(2.2rem, 1.4rem + 3.4vw, 4.5rem), 1, -0.03em): the contact heading, max 16ch.
- **Headline** (600, clamp(1.9rem, 1.4rem + 2vw, 3rem), 1.05, -0.02em): ordinary section headings ("Other projects", "About").
- **Title Mail** (600, clamp(1.4rem, 1rem + 2.6vw, 3rem), -0.02em): the email address on the contact field, underlined, wraps anywhere.
- **Tagline** (500, clamp(1.25rem, 1rem + 1vw, 1.75rem), -0.01em): the one-line tagline under the name.
- **Title** (600, 1.3rem): project names in the gallery. List rows use 1.05rem and about sub-heads 1rem at the same weight.
- **Body** (400, clamp(1rem, .97rem + .15vw, 1.08rem), 1.6): all running text. Measures: lede and contact copy 46ch, project copy 52ch, about copy 60ch.
- **Label** (500, .92rem): project meta links, list links, chip text (.95rem), nav (.95rem, 400, gray). Sentence case; no uppercase, no letterspaced labels.

### Named Rules
**The Three Weights Rule.** Only 400, 500 and 600 exist. 600 is for headings and the email; 500 for the tagline, buttons, links in meta rows and primary chips; 400 for everything else.

**The Balanced Heading Rule.** Every h1 to h3 is semibold with at least -0.02em tracking and `text-wrap: balance`.

## Layout

A single centered measure (1120px max) with a fluid side gutter (clamp(16px, 5vw, 64px)). The sticky header is 64px tall; the opening fills the viewport below it. Sections open with clamp(80px, 14vh, 140px) of top space and no bottom padding; the next section's top space does the separating.

- **Opening:** two columns at 1.15fr / 0.85fr with a 40px gap; text left, a square 420px-max block field right.
- **Work gallery:** two equal columns with 72px row gap and 40px column gap, starting 56px under the heading band. The heading band itself is full-bleed with gutter-only insets, so the sliding heading and its 2px rule run wider than the measure.
- **Other projects:** a three-column row grid (1fr / 1.7fr / 10rem) with links right-aligned, 20px row padding, 32px column gap.
- **About:** one column capped at 720px with 48px between its blocks.
- **Contact:** a full-width cobalt field with the content in the measure, at least one viewport tall, footer pushed to the bottom.

**Responsive (760px and below):** the opening stacks with the blocks under the text at full width; the gallery collapses to one column with 56px gaps and loses its parallax; list rows stack and links left-align; nav gap tightens to 14px at .9rem. The nav stays as four visible links, never a menu toggle.

## Elevation & Depth

Flat. There are no shadows and no gradients anywhere. Depth comes only from motion and layering order: the header sits over content on an opaque ground with a hairline under it, the right gallery column drifts against the left while scrolling, and the contact block scales over the page. At rest every surface is on the same plane.

### Named Rules
**The Flat Block Rule.** Blocks, buttons, chips and shots never cast a shadow and never carry a gradient. A block is a solid fill with a 4px corner.

## Shapes

Small, consistent rounding on a square vocabulary. Blocks, the button and chips share a 4px corner; screenshots get a softer 10px corner and are clipped to it (`clip-path: inset(0 round 10px)`); timeline markers are 12px squares with a 3px corner and a 2px ink border; the contact growth block is a 240px square at 12px. Lines are 2px solid ink when they are graphics (the work rule, the timeline line) and 1px hairline when they divide rows. No circles, no pills, no outlined boxes around content.

## Components

### Buttons
Solid and plain.
- **Shape:** gently squared (4px).
- **Primary:** ink fill, ground text, 500 weight, .7rem by 1.35rem padding, 46px minimum height.
- **Hover / Focus:** fill swaps to cobalt with white text over .2s; focus shows the global 2px cobalt outline at 3px offset.
- **Text link (secondary action):** a plain underlined link at 500 weight beside the button ("Open resume"), cobalt on hover.

### Chips (stack)
- **Style:** transparent fill, 1px ink border, 4px corner, .3rem by .8rem, .95rem at 500.
- **Minor:** hairline border, gray text, 400 weight, for secondary skills.
- **Motion:** each chip starts offset, rotated up to 14 degrees and transparent, and gathers into line as the stack scrolls from 95% to 55% of the viewport.

### Screenshot (shot)
- **Corner Style:** 10px, clipped.
- **Background:** white matte; the image is 16:10, `object-fit: cover`, anchored top-left.
- **Shadow Strategy:** none.
- **Border:** none.
- **Motion:** unmasks from `inset(16% 22% 16% 0% round 10px)` to full while the image scales 1.22 to 1, scrubbed between the shot's top at 98% and 65% of the viewport. On desktop every second project also drifts from +90px to -30px across its pass.
- Project text sits under the shot, never inside a card: title, gray description, then a meta row of gray tech and a 500-weight link.

### List row with drawn rule
- Rows are divided by a 1px hairline across the top of each row (plus a bottom hairline on the last). With motion, each top rule draws left to right (scaleX 0 to 1) as the row moves from 92% to 60% of the viewport. Without motion the rule is simply present.

### Timeline (recognition)
- A 2px ink line down the left at 5px, 28px of left padding, rows on a 5.5rem year column with tabular numerals in gray.
- Markers are 12px squares, 3px corner, ground fill and 2px ink border. They turn cobalt (fill and border, .25s) when the drawn line reaches them; the line draws top to bottom as the timeline moves from 75% to 55% of the viewport. Under reduced motion all markers are on.

### Inputs / Fields
There are no form inputs. The contact surface is the **contact field**: a full-width cobalt section, white text, the email as the large underlined target, socials as a wrapped link row, and a small footer. Links thicken their underline to 2px on hover; focus outlines switch to white.

### Navigation
- **Sticky header:** ground background, 1px hairline bottom, 64px tall; the name at 600 on the left, four gray text links on the right at .95rem with clamp(14px, 2.6vw, 32px) gaps. Links turn cobalt on hover. Anchor links scroll via Lenis with a 64px header offset.

### Opening block build (signature)
Nine 30% squares on a 35% pitch inside a square field, seven ink and two cobalt (top-center and bottom-right). They start scattered with rotation up to 90 degrees and scale .72; the opening pins below the header for 85% of a viewport and scrubs (.6 smoothing) them into a solid 3x3 grid, holds briefly, then releases. On phones the scatter is folded to positive offsets so blocks never cross the text above them.

### Sliding heading and rule (signature)
The work heading slides from xPercent 40 to 0 (12 to -8 on phones) across the full pass of its band, while a 2px ink rule beneath it draws from 0 to full width.

### Contact takeover (signature)
With motion, the contact section starts transparent on the ground. A 240px cobalt square with a 12px corner grows from scale .2 at -45 degrees to cover the viewport diagonal, unrotating as it grows, while the section is pinned for 80% of a viewport. Only once the block covers the screen does the contact content appear, then the pin holds and releases onto a plain cobalt page. Without motion the section is simply cobalt.

## Do's and Don'ts

### Do:
- **Do** scrub every animation to scroll position (`scrub: true` or `.6`, `ease: 'none'`) so it runs backwards on scroll up.
- **Do** give every animated element a final state that is the complete design, and ship that state alone under `prefers-reduced-motion` or when GSAP fails to load: no pins, no scrub, timeline markers on.
- **Do** build graphics from solid square blocks (4px corner) and 2px ink lines only.
- **Do** keep cobalt (#2340ff) to moving graphics, interaction feedback and the contact field.
- **Do** use Host Grotesk alone at 400, 500 and 600, with negative tracking on headings.
- **Do** let project content sit directly on the ground under its screenshot, separated by space, not containers.

### Don't:
- **Don't** add ambient or autoplaying motion: no loops, idle drift, marquees or time-based entrances.
- **Don't** add 3D scenes, WebGL backgrounds or particle fields.
- **Don't** use shadows or gradients on any surface.
- **Don't** wrap projects or sections in cards.
- **Don't** fade-up every section on entry; motion belongs to the graphics, not the copy.
- **Don't** introduce a second accent hue or tints of the existing tokens.
